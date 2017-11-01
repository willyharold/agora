<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Horaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Horaire controller.
 *
 */
class HoraireController extends Controller
{
    /**
     * Lists all horaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $horaires = $em->getRepository('NanoAgoraBundle:Horaire')->findAll();

        return $this->render('horaire/index.html.twig', array(
            'horaires' => $horaires,
        ));
    }

    /**
     * Creates a new horaire entity.
     *
     */
    public function newAction(Request $request)
    {
        $horaire = new Horaire();
        $form = $this->createForm('Nano\AgoraBundle\Form\HoraireType', $horaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($horaire);
            $em->flush();

            return $this->redirectToRoute('horaire_show', array('id' => $horaire->getId()));
        }

        return $this->render('horaire/new.html.twig', array(
            'horaire' => $horaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a horaire entity.
     *
     */
    public function showAction(Horaire $horaire)
    {
        $deleteForm = $this->createDeleteForm($horaire);

        return $this->render('horaire/show.html.twig', array(
            'horaire' => $horaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing horaire entity.
     *
     */
    public function editAction(Request $request, Horaire $horaire)
    {
        $deleteForm = $this->createDeleteForm($horaire);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\HoraireType', $horaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('horaire_edit', array('id' => $horaire->getId()));
        }

        return $this->render('horaire/edit.html.twig', array(
            'horaire' => $horaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a horaire entity.
     *
     */
    public function deleteAction(Request $request, Horaire $horaire)
    {
        $form = $this->createDeleteForm($horaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($horaire);
            $em->flush();
        }

        return $this->redirectToRoute('horaire_index');
    }

    /**
     * Creates a form to delete a horaire entity.
     *
     * @param Horaire $horaire The horaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Horaire $horaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('horaire_delete', array('id' => $horaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
