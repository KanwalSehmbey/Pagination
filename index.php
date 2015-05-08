<?php
if (isset($_GET['step'])) {
    $id = $_GET['step'];
    switch($id) {
        case "1":
            $content = "<h2>Step 1</h2><p>Aliquam at bibendum varius et, varius ligula. Duis sodales eu, purus. Proin dui vitae ante. Vivamus euismod. Vestibulum vestibulum, dolor sit amet metus at turpis. Curabitur non dui. In pede. Lorem ipsum erat, ut metus sed felis. Integer a dictum eget, ultricies lacinia id, porttitor vel, ornare at, rhoncus eu, odio. Aliquam erat vitae erat. Fusce consequat eu, semper sed, euismod mi. Curabitur eu justo. Curabitur magna ornare interdum, diam eros, id leo non mattis vel, orci. Sed lobortis laoreet fermentum. Morbi id ultrices mi. Suspendisse dignissim faucibus, erat dictum eget, cursus mauris nec diam mi non leo tristique lorem.</p>";
            break;
        case "2":
            $content = "<h2>Step 2</h2><p>venenatis, elit est, viverra venenatis nulla. Morbi eleifend et, tempus enim. Praesent tortor in lacus sagittis sed, ullamcorper et, enim. Mauris nec pede bibendum mi, nec tincidunt tellus vulputate faucibus. Sed vel leo. Sed a placerat tempus, urna semper tellus. Cum sociis natoque penatibus et netus et magnis dis parturient montes, nascetur ridiculus mus. Nunc vulputate. Morbi urna mauris, consectetuer adipiscing ornare. Etiam semper, enim nunc, mollis sodales. Aenean ac turpis eget sem et tellus. Donec nunc. Maecenas pulvinar vitae, pede. Vestibulum dapibus vitae, faucibus orci consequat ipsum primis in augue. Donec ullamcorper, enim vehicula ullamcorper. Nam eu wisi. Sed</p>";
            break;
        case "3":
            $content = "<h2>Step 3</h2><p>turpis, molestie vitae, lectus. Phasellus hendrerit magna ornare varius, scelerisque sed, viverra sed, posuere cubilia Curae; Nullam fermentum eget, dictum ut, dignissim sagittis luctus metus ac quam eros viverra diam pede dictum sit amet, consectetuer adipiscing laoreet, enim sed nulla quam molestie mauris. Etiam nibh rutrum in, purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per inceptos hymenaeos. Etiam at bibendum purus et magnis dis parturient montes, nascetur ridiculus mus. Morbi accumsan, urna eu enim. Duis hendrerit nibh porta dolor lorem, at orci sem in dictum accumsan eget, facilisis enim. Cras adipiscing metus. Class</p>";
            break;
        case "4":
            $content = "<h2>Step 4</h2><p>wisi, mollis sodales. Aenean dictum a, sodales dui lectus, tincidunt eget, condimentum velit. In nonummy. Phasellus ut venenatis eu, pretium eget, cursus pulvinar mollis, turpis velit, condimentum wisi. Phasellus nec augue. Sed orci massa, feugiat at, porttitor interdum. Nulla augue purus, nec tortor ante vitae justo. Curabitur sed tortor. In lobortis laoreet viverra pede id lectus. Pellentesque ac elit dapibus vel, purus. Aliquam auctor tincidunt. Pellentesque sodales in, adipiscing felis adipiscing risus risus nibh justo, condimentum sed, vestibulum et, ultricies iaculis lectus. Phasellus posuere cubilia Curae; Duis sit amet dui. Mauris viverra neque, congue vel, luctus augue. Praesent tortor et</p>";
            break;
        case "5":
            $content = "<h2>Step 5</h2><p>risus vehicula sapien magna quis mauris nulla, at ante. Vestibulum id justo nibh, ut eros egestas non, leo. Suspendisse eu lorem. Maecenas at consequat faucibus, nulla ligula eleifend tincidunt, risus at lacus malesuada tristique, augue at orci vitae lectus vel metus. Aliquam auctor augue eu sodales dui ligula, in dui. Suspendisse gravida. Suspendisse dolor ac nibh porta sed, dui. In hac habitasse platea dictumst. Maecenas pulvinar interdum, lacus. Integer mi augue, rhoncus dolor sit amet, neque. Sed ultricies lobortis, mi at lacus at fermentum leo nec diam magna purus, nec odio. Class aptent taciti sociosqu ad litora torquent per inceptos</p>";
            break;
        case "6":
            $content = "<h2>Step 6</h2><p>Congratulations!</p>";
            break;
        default:
            break;
    }
    echo $content;
}
?>
