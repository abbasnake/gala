/*jshint esversion: 6 */




class Test {
    constructor(typeOfTest) {
        this.type = typeOfTest;

        this.questionNr = 1;
        this.questionArray = []; //generated below
        this.answerArray = []; //generated below

        this.cacheDom();

        // creating divs for all components
        this.createDivs([
            "questionDiv", 
            "answerDiv", 
            "progressDiv", 
            "nextDiv"
            ]);

        this.displayQuestion();

        this.createProgressBar();

        // this fills question and answer arrays declared above
        this.generateQuestionsAndAnswers();

        this.createAnswerButtons();
        this.answerButtonFunctionality();
        this.createNextButton();
        this.nextButtonFunctionality();
    }

    cacheDom() {
        this.testArea = document.querySelector(".testArea");
    }

    createDivs(arr) {
        for(let i = 0; i < arr.length; i++) {
            this[arr[i]] = document.createElement("div");
            this[arr[i]].classList.add(arr[i]);
            this.testArea.appendChild(this[arr[i]]);
        }
    }

    displayQuestion() {
        this.question = document.createElement("h1");
        this.question.classList.add("question");
        this.questionDiv.appendChild(this.question);
    }

    updateQuestion() {
        this.question.textContent = this.questionArray[this.questionNr-1];
    }

    createProgressBar() {
        this.progressBar = document.createElement("div");
        this.progressBar.classList.add("progressBar");
        this.progressDiv.appendChild(this.progressBar);
        this.updateProgressBar();

    }

    updateProgressBar() {
        this.progressBar.textContent = `Progress: ${this.questionNr}`;
    }

    generateQuestionsAndAnswers() {
        const questionCount = 4;
        for(let i = 0; i < questionCount; i++) {
            const num1 = Math.floor(Math.random() * 100);
            const num2 = Math.floor(Math.random() * 100);
            this.answerArray.push(num1 + num2);
            this.questionArray.push(`${num1} + ${num2}`);
        }
        this.updateQuestion();
    }

    returnFakeAnswers() {
        let fakeAnswers = [];
        // generating fake answer count randomly, (1-5 in this case)
        const answerCount = Math.floor(Math.random() * 5) + 1;
        for(let i = 0; i < answerCount; i++) {
            const num1 = Math.floor(Math.random() * 100);
            let num2 = Math.floor(Math.random() * 100);
            // dealing with cases where fake answers
            // accidentally match the real one
            // which is also the reason for num2 being
            // a let instead of const
            if(num1 + num2 === this.answerArray[i]) {
                num2++;
            }
            fakeAnswers.push(num1 + num2);
        }
        // console.log(`fake answer arr ${fakeAnswers}`);
        return fakeAnswers;
    }

    createAnswerButtons() {
        let allAnswers = this.returnFakeAnswers();
        allAnswers.push(this.answerArray[this.questionNr-1]);
        for(let i = 0; i < allAnswers.length; i++) {
            this.button = document.createElement("button");
            this.button.textContent = `${allAnswers[i]}`;
            this.button.classList.add("answerButton");
            this.answerDiv.appendChild(this.button);
        }
    }

    answerButtonFunctionality() {
        const buttons = document.querySelectorAll(".answerButton");
        for(let i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener("click", () => {
                console.log(`Button ${buttons[i].textContent}`);
            });
        }
    }

    createNextButton() {
        this.nextButton = document.createElement("button");
        this.nextButton.textContent = "Next";
        this.nextButton.classList.add("nextButton");
        this.nextDiv.appendChild(this.nextButton);
    }

    nextButtonFunctionality() {
        this.nextButton.addEventListener("click", () => {
            this.questionNr++;
            this.updateProgressBar();
        });
    }

}

const t1 = new Test("test1");