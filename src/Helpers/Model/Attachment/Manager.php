<?php

namespace App\Helpers\Model\Attachment;

use Cake\Utility\Text;
use Cake\Filesystem\Folder;
use Intervention\Image\ImageManagerStatic as Image;
use App\Model\Entity\Attachment;

class Manager
{
    private $attachmentEntity;

    public function makeImage($imgRequest, $folderUpload = null)
    {
        if (is_null($folderUpload)) {
            $folderUpload = date('Y') . DS . date('m');
        }

        try{
            $folderAddress = 'uploads' . DS . $folderUpload;
            $realName = pathinfo($imgRequest['name'], PATHINFO_FILENAME);

            $nameFile = Text::uuid();

            $folderAddressWithName = $folderAddress . DS . $nameFile;
            $folderAddressWithNameUri = str_replace(DS, '/', DS . $folderAddressWithName);

            $folder = new Folder(WWW_ROOT . $folderAddress, true);

            $img = Image::make($imgRequest['tmp_name']);

            $img->encode('jpg', 90)
                ->save($folderAddressWithName . '.jpg');

            $img->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
                ->crop(400, 300)
                ->save($folderAddressWithName . '-thumbnail.jpg');

            $this->attachmentEntity = new Attachment([
                'uri' => $folderAddressWithNameUri . '.jpg',
                'thumb_uri' => $folderAddressWithNameUri . '-thumbnail.jpg',
                'name' => $realName
            ]);

            return $this->attachmentEntity;

        }catch(\Exception $e) {
            return 'Não foi possível criar a pasta.\n' . $e->getMessage();
        }
    }

    public function getEntity()
    {
        return $this->attachmentEntity;
    }
}