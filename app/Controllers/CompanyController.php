<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompanyModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\ResponseInterface;

class CompanyController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        $model = model(CompanyModel::class);
        $searchTerm = $this->request->getVar('search');
        $data = [
            // for pagination but not working i will correct it
            // 'companies' => $model->get_company(null, $searchTerm)->paginate(5),
            'companies' => $model->get_company(null, $searchTerm),
            'pager' => $model->pager,
            'title' => 'Company archive',
        ];
        return view('templates/header', $data)
            . view('company/index')
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Company Create',
        ];
        return view('templates/header', $data)
            . view('company/create')
            . view('templates/footer');
    }

    public function store()
    {
        helper('form');
        $data =  $this->request->getPost([
            'brand_name',
            'year_of_company_foundation',
            'year_of_offering_franchises',
            'pay_box_of_franchises',
            'average_turnover',
            'contact_phone_name',
            'designation',
            'whatsApp_INT',
            'email',
            'office_INT',
            'postal_address',
            'description',
            'category',
            'country',
            'city',
            'province',
            'brand_logo',
            'setup_image_1',
            'setup_image_2',
            'setup_image_3',
            'brand_type',
            'brand_slogan',
            'slider',
            'image'
        ]);

        $validationRules = [
            'brand_name' => 'required|max_length[20]|min_length[3]',
            'whatsApp_INT' => 'required|number_format',
            'email' => 'required|valid_email',
            // 'brand_logo' => 'uploaded[brand_logo]|max_size[brand_logo,1024]|is_image[brand_logo]',
            // 'setup_image_1' => 'uploaded[setup_image_1]|max_size[setup_image_1,1024]|is_image[setup_image_1]',
            // 'setup_image_2' => 'uploaded[setup_image_2]|max_size[setup_image_2,1024]|is_image[setup_image_2]',
            // 'setup_image_3' => 'uploaded[setup_image_3]|max_size[setup_image_3,1024]|is_image[setup_image_3]',
            // 'slider' => 'uploaded[slider]|max_size[slider,1024]|is_image[slider]',
            // 'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];

        if (!$this->validateData($data, $validationRules)) {
            return $this->create();
        }

        foreach (['brand_logo', 'setup_image_1', 'setup_image_2', 'setup_image_3', 'slider', 'image'] as $fileField) {
            if ($file = $this->request->getFile($fileField)) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('uploads/images/', $newName);
                    $data[$fileField] = $newName;
                }
            }
        }

        $model = model(CompanyModel::class);
        $model->add_company($data);
        return view('templates/header', ['title' => 'Create a company'])
            . view('company/success')
            . view('templates/footer');
    }

    public function edit($id)
    {
        helper('form');
        $model = model(CompanyModel::class);
        $data = [
            'company' =>  $model->get_company($id),
        ];
        return view('company/edit', $data);
    }

    public function update($id)
    {
        $model = model(CompanyModel::class);
        $data = [
            'brand_name' => $this->request->getPost('brand_name'),
            'year_of_company_foundation' => $this->request->getPost('year_of_company_foundation'),
            'year_of_offering_franchises' => $this->request->getPost('year_of_offering_franchises'),
            'pay_box_of_franchises' => $this->request->getPost('pay_box_of_franchises'),
            'average_turnover' => $this->request->getPost('average_turnover'),
            'contact_phone_name' => $this->request->getPost('contact_phone_name'),
            'designation' => $this->request->getPost('designation'),
            'whatsApp_INT' => $this->request->getPost('whatsApp_INT'),
            'email' => $this->request->getPost('email'),
            'office_INT' => $this->request->getPost('office_INT'),
            'postal_address' => $this->request->getPost('postal_address'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'country' => $this->request->getPost('country'),
            'city' => $this->request->getPost('city'),
            'province' => $this->request->getPost('province'),
            'brand_logo' => $this->request->getPost('brand_logo'),
            'setup_image_1' => $this->request->getPost('setup_image_1'),
            'setup_image_2' => $this->request->getPost('setup_image_2'),
            'setup_image_3' => $this->request->getPost('setup_image_3'),
            'brand_type' => $this->request->getPost('brand_type'),
            'brand_slogan' => $this->request->getPost('brand_slogan'),
            'slider' => $this->request->getPost('slider'),
            'image' => $this->request->getPost('image'),
        ];

        $validationRules = [
            'brand_name' => 'required|max_length[20]|min_length[3]',
            'whatsApp_INT' => 'required|number_format',
            'email' => 'required|valid_email',
            // 'brand_logo' => 'uploaded[brand_logo]|max_size[brand_logo,1024]|is_image[brand_logo]',
            // 'setup_image_1' => 'uploaded[setup_image_1]|max_size[setup_image_1,1024]|is_image[setup_image_1]',
            // 'setup_image_2' => 'uploaded[setup_image_2]|max_size[setup_image_2,1024]|is_image[setup_image_2]',
            // 'setup_image_3' => 'uploaded[setup_image_3]|max_size[setup_image_3,1024]|is_image[setup_image_3]',
            // 'slider' => 'uploaded[slider]|max_size[slider,1024]|is_image[slider]',
            // 'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];

        if (!$this->validateData($data, $validationRules)) {
            return $this->create();
        }

        foreach (['brand_logo', 'setup_image_1', 'setup_image_2', 'setup_image_3', 'slider', 'image'] as $fileField) {
            $existingImage = $this->request->getPost('existing_' . $fileField);
            $file = $this->request->getFile($fileField);
            if (empty($file->getName()) && !empty($existingImage)) {
                $data[$fileField] = $existingImage;
            } elseif ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('uploads/images/', $newName);
                $data[$fileField] = $newName;
            }
        }

        $model->update_company($id, $data);
        return view('templates/header', ['title' => 'update a company'])
            . view('company/success')
            . view('templates/footer');
    }

    public function delete($id)
    {
        $model = model(CompanyModel::class);
        $model->delete_company($id);
        return redirect()->to('/company');
    }

    public function view($id = null)
    {
        $model = model(CompanyModel::class);

        $data = [
            'company' => $model->one_company($id),
            'pager' => $model->pager,
            'title' => 'View Company',
        ];

        return view('templates/header', $data)
            . view('company/view')
            . view('templates/footer');
    }
}
