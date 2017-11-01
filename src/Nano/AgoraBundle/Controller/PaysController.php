<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Pays;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pay controller.
 *
 */
class PaysController extends Controller
{
    /**
     * Lists all pays entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pays = $em->getRepository('NanoAgoraBundle:Pays')->findAll();

        return $this->render('pays/index.html.twig', array(
            'pays' => $pays,
        ));
    }

    /**
     * Creates a new pays entity.
     *
     */
    public function newAction(Request $request)
    {
        $pays = new Pays();
        $form = $this->createForm('Nano\AgoraBundle\Form\PaysType', $pays);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pays);
            $em->flush();

            return $this->redirectToRoute('pays_show', array('id' => $pays->getId()));
        }

        return $this->render('pays/new.html.twig', array(
            'pays' => $pays,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pays entity.
     *
     */
    public function showAction(Pays $pays)
    {
        $deleteForm = $this->createDeleteForm($pays);

        return $this->render('pays/show.html.twig', array(
            'pays' => $pays,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pays entity.
     *
     */
    public function editAction(Request $request, Pays $pays)
    {
        $deleteForm = $this->createDeleteForm($pays);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\PaysType', $pays);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pays_edit', array('id' => $pays->getId()));
        }

        return $this->render('pays/edit.html.twig', array(
            'pays' => $pays,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pays entity.
     *
     */
    public function deleteAction(Request $request, Pays $pays)
    {
        $form = $this->createDeleteForm($pays);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pays);
            $em->flush();
        }

        return $this->redirectToRoute('pays_index');
    }

    /**
     * Creates a form to delete a pays entity.
     *
     * @param Pays $pays The pays entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pays $pays)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pays_delete', array('id' => $pays->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
