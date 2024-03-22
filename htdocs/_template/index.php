    <?
    // Session::loadTemplate('Index/calltoaction');
    if (Session::isAuthenticated()) {
        Session::loadTemplate('Index/calltoaction');
        Session::loadTemplate('Index/photogram');
    } else {
        Session::loadTemplate('Index/login');
    }
    ?>
