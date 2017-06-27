<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Examen;
use Nano\AgoraBundle\Form\ExamenType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Examen controller.
 *
 */
class ExamenController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('NanoAgoraBundle:Examen')->findAll();
        return $entities;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/{id}")
     */
    public function findAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NanoAgoraBundle:Examen')->find($request->get('id'));
        if (empty($entity)) {
            $reponse = new JsonResponse(array('message' => "contenu introuvable"), Response::HTTP_INTERNAL_SERVER_ERROR);
            $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            return $reponse;
        }
        return $entity;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/create")
     */
    public function createAction(Request $request) {
        $entity = new Examen();
        $form = $this->createForm(ExamenType::class, $entity);

        $form->submit($request->request->all()); // Validation des données

        if ($form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $entity;
            } catch (\Doctrine\DBAL\Exception\NotNullConstraintViolationException $e) {
                $reponse = new JsonResponse(array('message' => "certains champs ne sont pas corrects ou sont vides"), Response::HTTP_INTERNAL_SERVER_ERROR);
                $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
                return $reponse;
            }
        } else {
            $reponse = new JsonResponse(array('message' => "certains champs ne sont pas corrects"), Response::HTTP_INTERNAL_SERVER_ERROR);
            $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            return $reponse;
        }
    }

    /**
     * @Rest\View()
     * @Rest\Put("/update/{id}")
     */
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NanoAgoraBundle:Examen')->find($request->get('id'));
        if (empty($entity)) {
            $reponse = new JsonResponse(array('message' => "contenu introuvable"), Response::HTTP_INTERNAL_SERVER_ERROR);
            $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            return $reponse;
        }
        $form = $this->createForm(ExamenType::class, $entity);
        $form->submit($request->request->all(), true); // Validation des données
        if ($form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->merge($entity);
                $em->flush();
                return $entity;
            } catch (\Doctrine\DBAL\Exception\NotNullConstraintViolationException $e) {
                $reponse = new JsonResponse(array('message' => "certains champs ne sont pas corrects ou sont vides"), Response::HTTP_INTERNAL_SERVER_ERROR);
                $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
                return $reponse;
            }
        } else {
            $reponse = new JsonResponse(array('message' => "certains champs ne sont pas corrects"), Response::HTTP_INTERNAL_SERVER_ERROR);
            $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            return $reponse;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/delete/{id}")
     */
    public function removeAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NanoAgoraBundle:Examen')
            ->find($request->get('id'));

        if ($entity) {
            try {
                $em->remove($entity);
                $em->flush();
            } catch (\Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException $e) {
                $reponse = new JsonResponse(array('message' => "ce contenu est utilisé ailleurs"), Response::HTTP_INTERNAL_SERVER_ERROR);
                $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
                return $reponse;
            }
        }else{
            $reponse = new JsonResponse(array('message' => "ce contenu est introuvable"), Response::HTTP_INTERNAL_SERVER_ERROR);
            $reponse->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            return $reponse;
        }
    }

}