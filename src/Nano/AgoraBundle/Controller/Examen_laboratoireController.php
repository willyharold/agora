<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Examen_laboratoire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examen_laboratoire controller.
 *
 */
class Examen_laboratoireController extends Controller
{
    /**
     * Lists all examen_laboratoire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examen_laboratoires  = $em->getRepository('NanoAgoraBundle:Examen_laboratoire')->findAll();

        return $this->render('examen_laboratoire/index.html.twig', array(
            'examen_laboratoires' => $examen_laboratoires,
        ));
    }

    /**
     * Creates a new examen_laboratoire entity.
     *
     */
    public function newAction(Request $request)
    {
        $examen_laboratoire = new Examen_laboratoire();
        $form = $this->createForm('Nano\AgoraBundle\Form\Examen_laboratoireType', $examen_laboratoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($examen_laboratoire);
            $em->flush();

            return $this->redirectToRoute('examen_laboratoire_show', array('id' => $examen_laboratoire->getId()));
        }

        return $this->render('examen_laboratoire/new.html.twig', array(
            'examen_laboratoire' => $examen_laboratoire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a examen_laboratoire entity.
     *
     */
    public function showAction(Examen_laboratoire $examen_laboratoire)
    {
        $deleteForm = $this->createDeleteForm($examen_laboratoire);

        return $this->render('examen_laboratoire/show.html.twig', array(
            'examen_laboratoire' => $examen_laboratoire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing examen_laboratoire entity.
     *
     */
    public function editAction(Request $request, Examen_laboratoire $examen_laboratoire)
    {
        $deleteForm = $this->createDeleteForm($examen_laboratoire);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\Examen_laboratoireType', $examen_laboratoire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('examen_laboratoire_edit', array('id' => $examen_laboratoire->getId()));
        }

        return $this->render('examen_laboratoire/edit.html.twig', array(
            'examen_laboratoire' => $examen_laboratoire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a examen_laboratoire entity.
     *
     */
    public function deleteAction(Request $request, Examen_laboratoire $examen_laboratoire)
    {
        $form = $this->createDeleteForm($examen_laboratoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examen_laboratoire);
            $em->flush();
        }

        return $this->redirectToRoute('examen_laboratoire_index');
    }

    /**
     * Creates a form to delete a examen_laboratoire entity.
     *
     * @param Examen_laboratoire $examen_laboratoire The examen_laboratoire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Examen_laboratoire $examen_laboratoire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examen_laboratoire_delete', array('id' => $examen_laboratoire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
