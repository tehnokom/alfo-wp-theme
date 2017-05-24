/*$(function()
{


    //Открытие меню в мобильной версии
    if ($('[data-role="mobile_sidebar"]').length > 0)
    {

        var $menu = $('[data-role="mobile_sidebar"]'),
            $trigger = $('[data-role="menu_trigger"]');

        $trigger.click(function ()
        {
            if (!$menu.hasClass('open'))
            {
                $menu.addClass('open');
            }
            else
            {
                $menu.removeClass('open');
            }
        });

    }


});*/


window.onload = function()
{
	
	if(document.querySelectorAll('[data-role="mobile_sidebar"]').length > 0)
	{
		var	$menu = document.getElementById('mobile_sidebar'),
			$trigger = document.getElementById('menu_trigger');
		
		$trigger.addEventListener('click', function()
		{
			$menu.classList.toggle('open');
		});
	}
	
}