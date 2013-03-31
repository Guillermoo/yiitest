<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class getimg {

       public function init()
        {

        }

        public function readImage($filename)
        {

            $path=Yii::getPathOfAlias('webroot.protected.upload.images') . '/';
            $file=$path.$filename;

            if (file_exists($file))
            {
                header('Content-Type: image/jpeg');
                header('Content-Length: ' . filesize($file));
                readfile($file);
             }
            else
            {
                 return "";
            }

        }

}