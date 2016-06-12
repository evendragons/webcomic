<?php

namespace Bolt\Extension\EvenDragons\TwigPHPBits;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function getName()
    {
        return "TwigPHPBits";
    }


    public function initialize()
    {
        /*
         * Own Twig functions:
         * You can define methods inside this class as Twig functions.
         * How to use the following example in your template: {{ file_get_contents(url) }}
         * It will display the results of that php query, in json..
         * */

        $this->addTwigFunction(
            'file_get_contents', // Twig function name. What you type out in twig.
            'fileGetContents'  // Method in this class (declared below)
        );

        $this->addTwigFunction(
	    'json_decode', // Twig function name. What you type out in twig.
	    'jsonDecode' // Method in this class (defined below)
	);
    }

    /**
     * Get contents of given file
     * @param $file
     * @return json_object
     */
    public function fileGetContents($file)
    {
        return file_get_contents($file);
    }
    /**
     * Get readable data out of a set of JSON data
     * @param $json_object
     * @return fbdata
     */
    public function jsonDecode($json_object)
    {
	return json_decode($json_object);
    }
}
