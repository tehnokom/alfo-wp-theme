$(function()
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


});