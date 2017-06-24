<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Rdv;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Rdv controller.
 *
 * @Route("rdv")
 */
class RdvController extends Controller
{
    /**
     * Lists all rdv entities.
     *
     * @Route("/", name="rdv_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rdvs = $em->getRepository('NanoAgoraBundle:Rdv')->findAll();

        return $this->render('rdv/index.html.twig', array(
            'rdvs' => $rdvs,
        ));
    }

    /**
     * Creates a new rdv entity.
     *
     * @Route("/new", name="rdv_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rdv = new Rdv();
        $form = $this->createForm('Nano\AgoraBundle\Form\RdvType', $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdv);
            $em->flush();

            return $this->redirectToRoute('rdv_show', array('id' => $rdv->getId()));
        }

        return $this->render('rdv/new.html.twig', array(
            'rdv' => $rdv,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rdv entity.
     *
     * @Route("/{id}", name="rdv_show")
     * @Method("GET")
     */
    public function showAction(Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);

        return $this->render('rdv/show.html.twig', array(
            'rdv' => $rdv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rdv entity.
     *
     * @Route("/{id}/edit", name="rdv_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\RdvType', $rdv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rdv_edit', array('id' => $rdv->getId()));
        }

        return $this->render('rdv/edit.html.twig', array(
            'rdv' => $rdv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rdv entity.
     *
     * @Route("/{id}", name="rdv_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Rdv $rdv)
    {
        $form = $this->createDeleteForm($rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rdv);
            $em->flush();
        }

        return $this->redirectToRoute('rdv_index');
    }

    /**
     * Creates a form to delete a rdv entity.
     *
     * @param Rdv $rdv The rdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rdv $rdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdv_delete', array('id' => $rdv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
