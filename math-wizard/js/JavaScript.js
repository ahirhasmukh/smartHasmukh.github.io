function selectGrade(sender) {
    switch (sender.id.split("-")[1]) {
        case 'k':
            window.location = "mathwizard-grade-k-topic.html";
            break;
        case '1':
            window.location = "mathwizard-grade-1-topic.html";
            break;
        case '2':
          
            break;
        case '3':
            alert('grade-3');
            break;
        case '4':
            alert('grade-4');
            break;
        case '5':
            alert('grade-5');
            break;
        case '6':
            alert('grade-6');
            break;
    }

}

function select_activity(sender) {
        switch (sender.id) {
            case "counting":
                window.location = 'mathwizard-grade-k-counting.html';
                break;

            case "addition":
                window.location = 'mathwizard-grade-k-addition.html';
                break;

            case "substraction":
                window.location = 'mathwizard-grade-k-substraction.html';
                break;

            case "shapeidentification":
                window.location = 'mathwizard-grade-k-shape.html';
                break;

            case "dissimilarobject":
                window.location = 'mathwizard-grade-k-dissimilar.html';
                break;

            case "ordering":
                window.location = 'mathwizard-grade-k-ordering.html';
                break;
            case "sudoku-icon":
                
                
                break;
            case "hungry-fish":
               
                break;
        }
    }
