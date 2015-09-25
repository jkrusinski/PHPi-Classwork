$(document).ready(function(){
    $('.click-me').on('click', function () {
        console.log('success');
        var checked = $(':checked').val();
        var name = $('.name').val();
        var $response = $('.response');

        if (name == '') {
            $response.show();
            $response.append('Please Make Sure Name Is Entered<br />');
        } else if (!checked) {
            $response.show();
            $response.append('Please Make Sure Response Is Checked<br />');
        } else {
            $response.show();
            $response.append(name + ' replied ' + checked.toLowerCase() + ' to the party!<br />');
        }
    });
});