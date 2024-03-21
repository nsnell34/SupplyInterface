const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');

const app = express();
const PORT = 3000;

// For parsing form data
app.use(bodyParser.urlencoded({ extended: false }));

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.post('/action', (req, res) => {
    const action = req.body.act;

    switch (action) {
        case 'View Products':   
            res.send('Viewing Products');
            break;
        case 'View History':
            res.send('Viewing History');
            break;
        case 'Manage Orders':
            res.send('Managing Orders');
            break;
        case 'Manage Suppliers':
            res.send('Managing Suppliers');
            break;
        case 'Shipping & Logistics':
            res.send('Shipping & Logistics');
            break;
        case 'Reporting & Analytics':
            res.send('Reporting & Analytics');
            break;
        default:
            res.send('Invalid action');
            break;
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
