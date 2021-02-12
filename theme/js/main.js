site_url = document.currentScript.getAttribute('url');

function include(file) { 
    var script  = document.createElement('script'); 
    script.src  = file; 
    script.type = 'text/javascript'; 
    script.defer = true; 

    document.getElementsByTagName('head').item(0).appendChild(script); 
}

// Include CDNs Files
include('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
include('https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js');

// Include Dependecies Files
include(`${site_url}/js/bundle/owl.carousel.min.js`);

// Include Theme Files
include(`${site_url}/js/custom/functions.js`);