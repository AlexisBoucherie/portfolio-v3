<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DownloadController extends AbstractController
{
    #[Route('/download', name: 'app_download')]
    public function index(): Response
    {
        // Initialize a file URL to the variable
        $url = 'assets/file/CV_Alexis_Boucherie_DevWeb.pdf';

        // Use basename() function to return the base name of file
        $file_name = basename($url);

        // Use file_get_contents() function to get the file from url and use file_put_contents() function to save the file by using base name
        file_put_contents($file_name, file_get_contents($url));

        return $this->render('home/index.html.twig');
    }
}
