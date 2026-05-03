<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <style>
        .download_receiet_column {
            text-align: center;
            margin-top: 20px;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .receipt {
            width: 400px;
            border: 1px solid #000;
            padding: 20px;
            margin: auto;
        }

        .receipt h2,
        .receipt h3 {
            text-align: center;
            margin: 5px 0;
        }

        .receipt .brand {
            text-align: center;
            font-size: 14px;
            font-weight: 500;
        }

        .receipt .contact {
            text-align: center;
            font-size: 13px;
            font-weight: 500;
        }

        .receipt .details,
        .receipt .total,
        .receipt .footer {
            margin-top: 15px;
            font-size: 14px;
        }

        .receipt .details div,
        .receipt .total div {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .receipt .desc {
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 8px 0;
        }

        .receipt .note {
            font-size: 14px;
            margin-top: 10px;
        }

        .receipt .signature {
            margin-top: 20px;
        }

        .receipt .signature p {
            margin: 2px 0;
        }

        .receipt .thanks {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div id="receiptContent" class="receipt">
        <h2><u>Receipt</u></h2>
        <h3>Wheelywine Auto-mobile Workshop</h3>
        <!-- <div class="brand">(Brand : <?php //echo brand_title; ?>)</div>
        <div class="contact">
            <?php //echo receipt_link; ?><br>
            E-mail : <?php //echo receipt_email; ?>
        </div> -->

        <div class="details">
            <div><strong>Receipt No.</strong><span>#{{ $payment->order_id }}</span></div>
            <div><strong>Date</strong><span>{{ $payment->created_at->format('d M Y') }}</span></div>
            <div><strong>Name :</strong><span>{{ ucfirst($payment->name) }}</span></div>
        </div>

        <table style="width: 100%; border-top: 1px solid #000; border-bottom: 1px solid #000; margin-top: 20px; font-size: 14px;">
            <thead>
                <tr>
                    <th style="text-align: left; padding: 8px 0;">Service</th>
                    <th style="text-align: right; padding: 8px 0;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px 0;">{{$payment->service_name}} </td>
                    <td style="text-align: right;">{{$payment->amount}}/-</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0;"><strong>Total (Inc. Taxes)</strong></td>
                    <td style="text-align: right;"><strong>{{$payment->amount}}/-</strong></td>
                </tr>
            </tbody>
        </table>

        <div class="note">
            <strong>Payment Mode :</strong> Online (Cashfree)<br>
            <strong>Payment Status :</strong> {{ $payment->payment_status == 'PAID' ? 'PAID' : 'FAILED' }}
        </div>

        <div class="signature">
            <p>Authorised Signature</p>
            <p>Sd/-</p>
            <p><strong>Wheelywine</strong></p>
        </div>

        <div class="thanks">
            Thanks for your visit.
        </div>
    </div>

    <div class="download_receiet_column">
        <button type="button" class="btn btn-success" onclick="downloadPDF()">Download Receipt</button>
    </div>

    <!-- PDF Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        function downloadPDF() {
            const element = document.getElementById("receiptContent");
            const opt = {
                margin: 0.5,
                filename: 'wheelywine_appointment.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };
            html2pdf().set(opt).from(element).save();
        }
        // window.onload = function() {
        //     downloadPDF();
        // }
    </script>

</body>

</html>