<?php

namespace App\Controllers;

use App\Auth;
use App\Core\AControllerBase;
use App\Models\Login;
use App\Models\Offer;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {
        $offers = Offer::getAll();


        return $this->html(
            [
                'offers' => $offers
            ]);
    }

    public function myoffers()
    {
        $offers = Offer::getAll();

        return $this->html(
            [
                'offers' => $offers
            ]);
    }

    public function archive()
    {
        $offers = Offers::getAll();
        $logins = Login::getAll();
        return $this->html(
            [
                'offers' => $offers,
                'logins' => $logins
            ]);
    }

    public function categoryTutor()
    {
        $offers = Offer::getAll();

        return $this->html(
            [
                'offers' => $offers
            ]);
    }

    public function categoryTutoree()
    {
        $offers = Offer::getAll();

        return $this->html(
            [
                'offers' => $offers
            ]);
    }

    public function about()
    {
        return $this->html(
            []
        );
    }

    public function offerForm()
    {
        return $this->html(
            []
        );
    }

    public function singleOffer(){
        $offers = Offer::getAll();

        $parid = $this->request()->getValue('parid');
        return $this->html(
            [
                'offers' => $offers,
                'parid' => $this->request()->getValue('parid')
            ]);
    }

    public function editForm()
    {
        $offers = Offer::getAll();

        $parid = $this->request()->getValue('postid');
        return $this->html(
            [
                'offers' => $offers,
                'postid' => $this->request()->getValue('postid')
            ]);
    }

    public function editOffer()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }

        $offers = Offer::getAll();
        foreach ($offers as $offer) {
            if($offer->getId() == $this->request()->getValue('parid')){
                $offer->setTitle($this->request()->getValue('title'));
                $offer->setInfo($this->request()->getValue('info'));
                $offer->setPlace($this->request()->getValue('place'));
                $offer->setContact($this->request()->getValue('contact'));
                $offer->setMoreinfo($this->request()->getValue('moreinfo'));
                $offer->setEducation($this->request()->getValue('education'));
                $offer->setCourses($this->request()->getValue('courses'));
                $offer->setPay($this->request()->getValue('pay'));
                $offer->save();

            }
        }

        $this->redirect('home','myoffers');

    }

    public function shareOffer()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }

        $newOffer = new Offer();
        if($this->request()->getValue('type') == "one"){
            $newOffer->setTutor(1);
            $title = "Doučím: " . $this->request()->getValue('title');
            $newOffer->setTitle($title);
        } else {
            $newOffer->setTutor(0);
            $title = "Hľadám doučenie: " . $this->request()->getValue('title');
            $newOffer->setTitle($title);
        }
        $newOffer->setInfo($this->request()->getValue('info'));
        $newOffer->setPlace($this->request()->getValue('place'));
        $newOffer->setContact($this->request()->getValue('contact'));
        $newOffer->setMoreinfo($this->request()->getValue('moreinfo'));
        $newOffer->setEducation($this->request()->getValue('education'));
        $newOffer->setCourses($this->request()->getValue('courses'));
        $newOffer->setPay($this->request()->getValue('pay'));



        $newOffer->setLoginfk($_SESSION["name"]);
        $newOffer->save();
        $this->redirect('home');

    }

    public function deleteOffer()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }
        $parid = $this->request()->getValue('postid');
        $offers = Offer::getAll();
        foreach ($offers as $o)
        {
            if($parid == $o->getId())
            {
                $o->delete();
            }
        }
        $this->redirect('home','myOffers');
    }
}