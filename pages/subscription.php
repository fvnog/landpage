<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Página de assinatura</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="paypal-button-container-P-9W979555NV989704VMUEF2TQ"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'white',
          layout: 'vertical',
          label: 'subscribe'
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          /* Creates the subscription */
          plan_id: 'P-9W979555NV989704VMUEF2TQ'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
      }
  }).render('#paypal-button-container-P-9W979555NV989704VMUEF2TQ'); // Renders the PayPal button
</script>

</body>
</html>
