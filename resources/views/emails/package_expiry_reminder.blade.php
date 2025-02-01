<!DOCTYPE html>
<html>
<head>
    <title>Package Expiry Reminder</title>
</head>
<body>
    <p>Dear {{ $payment->user->name }},</p>

    <p>Your package <strong>{{ $payment->package->package_name }}</strong> will expire on <strong>{{ $payment->package_expire_date }}</strong>.</p>

    <p>Please renew it to continue enjoying our services.</p>

    <p>Best Regards,</p>
    <p>Fitness Club PVT LTD</p>
</body>
</html>
