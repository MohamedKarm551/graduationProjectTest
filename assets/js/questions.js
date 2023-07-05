// Get all the radio buttons and add event listeners to them
var radios = document.querySelectorAll('input[type="radio"]');
// console.log(radios);
radios.forEach(function(radio) {
    radio.addEventListener('change', function() {
        var question = this.closest('.wizz-sty');
        var feedback = question.querySelector('.feedback');
        if (this.checked && this.value == "yes") {
            question.dataset.score = 1;
        } else {
            question.dataset.score = 0;
        }
    });
});
//submit
var submitButton = document.getElementById('submit-button');

function calculateQuizResult() {
    var forms = document.querySelectorAll('form');
    var total = 0;
    var correct = 0;

    forms.forEach(function(form) {
        var inputs = form.querySelectorAll('input');
        var isCorrect = false;

        inputs.forEach(function(input) {
            if (input.checked && input.value === 'yes') {
                isCorrect = true;
            }
        });

        if (isCorrect) {
            correct++;
        }

        total++;
    });

    var grade = (correct / total) * 100;
    var result = document.getElementById('quiz-result');
    const pathsSelect = document.getElementById('paths');
//pathsSelect.options[pathsSelect.selectedIndex].text==> this is the title if selected path
    result.innerHTML = `In ${pathsSelect.options[pathsSelect.selectedIndex].text}, You Got ${correct} Out Of ${total} (${grade.toFixed(2)}%)`;
}

if (submitButton != null) {
    submitButton.addEventListener('click', function() {
        calculateQuizResult();
    });
}
//
// var PopUpModal = document.getElementById('popup-modal');

// if (PopUpModal != null) {
//   PopUpModal.addEventListener('click', function(event) {
//     if (event.target === PopUpModal) {
//       closePopupModal();
//     }
//   });
// }