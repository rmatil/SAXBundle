SAXBundle
=========

Symfony Bundle for the [SAX](https://github.com/rmatil/SAX) library


### Installation

Using composer:   
``` $ php composer.phar require "rmatil/sax-bundle":"dev-master" ```

Include bundle in ```app/AppKernel.php```:  
```
# app/AppKernel.php

<?php  
  
    // ...
  
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new RaiseNow\SaxBundle\RaiseNowSaxBundle()
            // ...
        );
        
        // ...
        
    }

    // ...
?>
```


### Documentation

An auto generated documentation can be found [here](http://rmatil.github.io/SAX/docs/)


