function printTable() {
    // Clone the table and remove both the first and last columns
    var printableTable = document.querySelector('table').cloneNode(true);
    var rows = printableTable.querySelectorAll('tr');
    for (var i = 0; i < rows.length; i++) {
        var checkbox = rows[i].querySelector('input[type="checkbox"]');
        if (checkbox && checkbox.checked) {
            rows[i].removeChild(rows[i].firstElementChild); // Remove first column
            var lastCell = rows[i].lastElementChild;
            if (lastCell) {
                rows[i].removeChild(lastCell); // Remove last column
            }
        } else {
            rows[i].remove(); // Remove the entire row if checkbox is not checked
        }
    }

    // Open a new window for printing
    var printWindow = window.open('', '_blank');

    // Add the table content to the new window
    printWindow.document.write('<html><head><title>Printed Table</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('table { border-collapse: collapse; width: 100%; border: 1px solid #000; }');
    printWindow.document.write('th, td { border: 1px solid #000; padding: 8px; text-align: left; }');
    printWindow.document.write('</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h1>Agents</h1>');
    printWindow.document.write(printableTable.outerHTML);
    printWindow.document.write('</body></html>');

    // Close the new window after printing is done
    printWindow.document.close();
    printWindow.print();
    printWindow.close();
}

// Recipt Print

function printReceipt() {
    var printContents = document.querySelector('.container').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
