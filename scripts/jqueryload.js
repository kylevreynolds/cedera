// JavaScript Document
$(document).ready(function() {

    // Check for hash value in URL
    var hash = window.location.hash.substr(1);
    var href = $('.LoadLinks a').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-6)){
            var toLoad = hash+'.html #right';
            $('#right').load(toLoad)
        }
    });

    $('.LoadLinks a').click(function(){

    var toLoad = $(this).attr('href')+' #right';
    $('#right').hide('fast',loadContent);
    $('#load').remove();
    $('#load').fadeIn('normal');
    window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
    function loadContent() {
    	$('#right').load(toLoad,'',showNewContent())
    }
    function showNewContent() {
    	$('#right').show('normal',hideLoader());
    }
    function hideLoader() {
    	$('#right').fadeOut('normal');
    }
    return false;

    });
});