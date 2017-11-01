<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Maladie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Maladie controller.
 *
 */
class MaladieController extends Controller
{
    /**
     * Lists all maladie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $maladies = $em->getRepository('NanoAgoraBundle:Maladie')->findAll();

        return $this->render('maladie/index.html.twig', array(
            'maladies' => $maladies,
        ));
    }

    /**
     * Creates a new maladie entity.
     *
     */
    public function newAction(Request $request)
    {
        $maladie = new Maladie();
        $form = $this->createForm('Nano\AgoraBundle\Form\MaladieType', $maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($maladie);
            $em->flush();

            return $this->redirectToRoute('maladie_show', array('id' => $maladie->getId()));
        }

        return $this->render('maladie/new.html.twig', array(
            'maladie' => $maladie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a maladie entity.
     *
     */
    public function showAction(Maladie $maladie)
    {
        $deleteForm = $this->createDeleteForm($maladie);

        return $this->render('maladie/show.html.twig', array(
            'maladie' => $maladie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing maladie entity.
     *
     */
    public function editAction(Request $request, Maladie $maladie)
    {
        $deleteForm = $this->createDeleteForm($maladie);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\MaladieType', $maladie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maladie_edit', array('id' => $maladie->getId()));
        }

        return $this->render('maladie/edit.html.twig', array(
            'maladie' => $maladie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a maladie entity.
     *
     */
    public function deleteAction(Request $request, Maladie $maladie)
    {
        $form = $this->createDeleteForm($maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($maladie);
            $em->flush();
        }

        return $this->redirectToRoute('maladie_index');
    }

    /**
     * Creates a form to delete a maladie entity.
     *
     * @param Maladie $maladie The maladie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Maladie $maladie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('maladie_delete', array('id' => $maladie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
