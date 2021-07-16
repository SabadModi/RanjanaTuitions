<!DOCTYPE html>
<html>

<head>
  <title>Notifications</title>
</head>

<body>

  <!-- <script type="text/javascript">
    if (window.webkitNotifications) {

      console.log('Your web browser does support notifications!');

      if (window.webkitNotifications.checkPermission() == 0) {
        // Good to go, you can create a notification.
        var myNotification = window.webkitNotifications.createNotification('icon.png', 'Item Saved', 'My Application Name');
        myNotification.show();
      } else {
        window.webkitNotifications.requestPermission(function() {});
      }

    } else {
      console.log('Your web browser does not support notifications!');
    }
  </script> -->
</body>

<input type="button" onclick="notif()">

<script src="push.js-master/bin/push.js"></script>
<script>
  function notif() {

    Push.create("Fee Reminder!", {
    body: "Child A has finished his 8 CLasses",
    icon: 'assets/svg/logo.png',
    requireInteraction: true,
    vibrate: 120000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
  }
</script>

</html>