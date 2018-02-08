/*jshint esversion: 6 */

const test1 = {
    question: {
        one: "5 + 5",
        two: "50 + 50",
        three: "500 + 500",
        four: "1 + 1"
    },
    answer: {
        one: "10",
        two: "100",
        three: "1000",
        four: "2"
    },
    fakeAnswers: {
        one: ["1", "4", "6"],
        two: ["10", "40", "60", "111"],
        three: ["100", "400"],
        four: ["1", "3", "6", "33"],
    }
};


class Test {
    constructor(typeOfTest) {
        this.type = typeOfTest;

        this.questionNr = 1;
        this.questionArray = []; //generated below
        this.answerArray = []; //generated below

        this.cacheDom();

        this.createProgressBar();

        // this fills question and answer arrays declared above
        this.generateQuestionsAndAnswers();

        this.createAnswerButtons();
        this.answerButtonFunctionality();

        this.nextButtonFunctionality();
    }

    cacheDom() {
        this.testArea = document.querySelector(".testArea");

        this.questionDiv = document.querySelector(".questionDiv");
        this.answerDiv = document.querySelector(".answerDiv");
        this.progressDiv = document.querySelector(".progressDiv");
        this.nextDiv = document.querySelector(".nextDiv");

        this.question = document.querySelector(".question");        
        this.nextButton = document.querySelector(".nextButton");        
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

    nextButtonFunctionality() {
        this.nextButton.addEventListener("click", () => {
            this.questionNr++;
            this.updateProgressBar();
        });
    }

}

const t1 = new Test("test1");