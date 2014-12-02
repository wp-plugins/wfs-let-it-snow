jQuery(document).ready(function(){
    
    var activeshadow = (settings.wfs_letitsnow_shadow === 'true');
    
    jQuery(document).snowfall({
	    flakeCount : parseInt( settings.wfs_letitsnow_flakeCount ),
	    minSize : parseInt( settings.wfs_letitsnow_minSize ),
	    maxSize : parseInt( settings.wfs_letitsnow_maxSize ), 
	    minSpeed : parseInt( settings.wfs_letitsnow_minSpeed ),
	    maxSpeed : parseInt( settings.wfs_letitsnow_maxSpeed ),
	    shadow : activeshadow, 
	    round : true
	});
    
});
