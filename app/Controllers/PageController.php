<?php

namespace App\Controllers;

use App\Models\EventModel;

class PageController extends BaseController
{
    public function index()
    {
        $model = new EventModel();
        $data['event'] = $model->findAll();
        foreach ($data['event'] as &$event) {
            $event['jadwal_club'] = $this->convertDate($event['jadwal_club']);
        }
        return view('Tiket_Bola/index', $data);
    }

    public function jadwal_pertandingan()
    {
        $model = new EventModel();
        $data['event'] = $model->findAll();
        foreach ($data['event'] as &$event) {
            $event['jadwal_club'] = $this->convertDate($event['jadwal_club']);
        }
        return view('Tiket_Bola/jadwal_pertandingan', $data);
    }

    public function event_pertandingan()
    {
        $model = new EventModel();
        $data['event'] = $model->findAll();
        foreach ($data['event'] as &$event) {
            $event['jadwal_club'] = $this->convertDate($event['jadwal_club']);
        }
        return view('Tiket_Bola/event_pertandingan', $data);
    }

    public function convertDate($waktu)
    {
        $datetime = new \DateTime($waktu);
        $formattedDate = $datetime->format('j F Y H:i');

        return $formattedDate;
    }
}
