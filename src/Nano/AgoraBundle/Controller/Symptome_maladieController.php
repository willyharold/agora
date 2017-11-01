<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Symptome_maladie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Symptome_maladie controller.
 *
 */
class Symptome_maladieController extends Controller
{
    /**
     * Lists all symptome_maladie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $symptome_maladies = $em->getRepository('NanoAgoraBundle:Symptome_maladie')->findAll();

        return $this->render('symptome_maladie/index.html.twig', array(
            'symptome_maladies' => $symptome_maladies,
        ));
    }

    /**
     * Creates a new symptome_maladie entity.
     *
     */
    public function newAction(Request $request)
    {
        $symptome_maladie = new Symptome_maladie();
        $form = $this->createForm('Nano\AgoraBundle\Form\Symptome_maladieType', $symptome_maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($symptome_maladie);
            $em->flush();

            return $this->redirectToRoute('symptome_maladie_show', array('id' => $symptome_maladie->getId()));
        }

        return $this->render('symptome_maladie/new.html.twig', array(
            'symptome_maladie' => $symptome_maladie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a symptome_maladie entity.
     *
     */
    public function showAction(Symptome_maladie $symptome_maladie)
    {
        $deleteForm = $this->createDeleteForm($symptome_maladie);

        return $this->render('symptome_maladie/show.html.twig', array(
            'symptome_maladie' => $symptome_maladie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing symptome_maladie entity.
     *
     */
    public function editAction(Request $request, Symptome_maladie $symptome_maladie)
    {
        $deleteForm = $this->createDeleteForm($symptome_maladie);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\Symptome_maladieType', $symptome_maladie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('symptome_maladie_edit', array('id' => $symptome_maladie->getId()));
        }

        return $this->render('symptome_maladie/edit.html.twig', array(
            'symptome_maladie' => $symptome_maladie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a symptome_maladie entity.
     *
     */
    public function deleteAction(Request $request, Symptome_maladie $symptome_maladie)
    {
        $form = $this->createDeleteForm($symptome_maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($symptome_maladie);
            $em->flush();
        }

        return $this->redirectToRoute('symptome_maladie_index');
    }

    /**
     * Creates a form to delete a symptome_maladie entity.
     *
     * @param Symptome_maladie $symptome_maladie The symptome_maladie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Symptome_maladie $symptome_maladie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('symptome_maladie_delete', array('id' => $symptome_maladie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
