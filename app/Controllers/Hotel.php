<?php

namespace App\Controllers;

use App\Models\HotelModel;

class Hotel extends BaseController
{
    protected $hotelModel;

    public function __construct()
    {
        $this->hotelModel = new HotelModel();
    }

    public function index()
    {
        $hotel = $this->hotelModel->findAll();
        $data = [
            'title' => 'List of Hotel',
            'hotel' => $hotel
        ];

        //dd($hotel);

        return view('hotel/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Insert New Hotel'
        ];

        return view('hotel/create', $data);
    }

    public function detail($id)
    {

        $hotel = $this->hotelModel->getHotel();
        $data = [
            'title' => "Hotel's Details",
            'hotel' => $this->hotelModel->getHotel($id)
        ];

        return view('hotel/detail', $data);
    }

    public function save()
    {
        // Validate hotel name
        if (!$this->validate([
            'hotelName' => 'required',
            // 'cover' => 'uploaded[sampul]|max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,/image/png]'
        ])) {
            session()->setFlashdata('emptyName', 'Hotel name cannot be empty!');
            // session()->setFlashdata('fileError', 'File upload error');
            return redirect()->to('/hotel/create');
        }

        // Upload file
        $fileCover = $this->request->getFile('cover');

        // Check file upload or not
        if ($fileCover->getError() == 4) {
            $fileName = 'default.jpg';
        } else {
            // Generate random filename
            $fileName = $fileCover->getRandomName();

            // Tranfer file to img
            $fileCover->move('img', $fileName);
        }



        $this->hotelModel->save([
            'hotelName' => $this->request->getVar('hotelName'),
            'price' => $this->request->getVar('price'),
            'room' => $this->request->getVar('room'),
            'meals' => $this->request->getVar('meals'),
            'validity' => $this->request->getVar('validity'),
            'location' => $this->request->getVar('location'),
            'cover' => $fileName
        ]);

        session()->setFlashdata('alert', 'Hotel inserted.');

        return redirect()->to('/hotel');
    }

    public function delete($id)
    {

        //Search for image name
        $hotel = $this->hotelModel->find($id);

        //Verify if image name isn't default.jpg

        if ($hotel['cover'] != 'default.jpg') {
            //Delete image too
            unlink('img/' . $hotel['cover']);
        }

        $this->hotelModel->delete($id);

        session()->setFlashdata('alert', 'Hotel deleted.');

        return redirect()->to('/hotel');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Hotel',
            'hotel' => $this->hotelModel->getHotel($id)
        ];

        return view('hotel/edit', $data);
    }

    public function update($id)
    {
        $this->hotelModel->save([
            'id' => $id,
            'hotelName' => $this->request->getVar('hotelName'),
            'price' => $this->request->getVar('price'),
            'room' => $this->request->getVar('room'),
            // 'hotelName' => $this->request->getVar('hotelName'),
            'meals' => $this->request->getVar('meals'),
            'validity' => $this->request->getVar('validity'),
            'location' => $this->request->getVar('location'),
        ]);

        session()->setFlashdata('alert', 'Hotel information edited.');

        return redirect()->to('/hotel');
    }
}
