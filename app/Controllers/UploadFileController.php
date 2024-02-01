<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UploadFileModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Files\File;

class UploadFileController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('upload_file/index', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[userfile,100]',
                    'max_dims[userfile,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('upload_file/index', $data);
        }

        $img = $this->request->getFile('userfile');
        
        // the commented code not inserted in database
        // if (! $img->hasMoved()) {
        //     $filepath = WRITEPATH . 'uploads/' . $img->store();

        //     $data = ['uploaded_fileinfo' => new File($filepath)];

        //     return view('upload_file/success', $data);
        // }

        if($img->isValid() && ! $img->hasMoved())
        {
            $imgName = $img->getRandomName();
            $img->move('uploads/', $imgName);
        }

        $model = model(UploadFileModel::class);
        $add = [
            'image' => $imgName
        ];
        $model->add_image($add);

        $data = ['errors' => 'The file has already been moved.'];

        return view('upload_file/index', $data);
    }

    public function upload_multiple() {

        $validationRule = [
            'images' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[images]',
                    'is_image[images]',
                    'mime_in[images,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[images,100]',
                    'max_dims[images,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('upload_file/index', $data);
        }

        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile['images'] as $img) {
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $filepath = $img->move(WRITEPATH . 'uploads/', $newName);
                    $data = ['uploaded_fileinfo' => new File($filepath)];
                }
            }
            return view('upload_file/success', $data);
        }

    }
}
