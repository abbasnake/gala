/*jshint esversion: 6 */


class Test {
    constructor(typeOfTest) {
        this.type = typeOfTest;

        this.questionNr = 1;
        this.questionArray = [];
        this.answerArray = [];
        this.fakeAnswerArray = [];

        this.cacheDom();
        this.createProgressBar();

        // this fills question and answer arrays declared above
        this.generateQuestionsAndAnswers();
        // same as above but for fake answers
        this.generateFakeAnswers();

        this.createAnswerButtons();
        this.createNextButton();
    }

    cacheDom() {
        this.testArea = document.querySelector(".testArea");
    }

    createProgressBar() {
        this.progressBar = document.createElement("div");
        this.progressBar.textContent = `Progress: ${this.questionNr}`;
        this.progressBar.classList.add("progressBar");
        this.testArea.appendChild(this.progressBar);

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
    }

    generateFakeAnswers() {
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
            this.fakeAnswerArray.push(num1 + num2);
        }
    }

    createAnswerButtons() {
        // the +1 in this.fakeAnswerArray + 1 below is
        // to make room for the actual right answer 
        for(let i = 0; i < this.fakeAnswerArray.length + 1; i++) {
            this.button = document.createElement("button");
            this.button.textContent = `A${i+1} - ${this.fakeAnswerArray[i]}`;
            this.button.classList.add("answerButton");
            this.testArea.appendChild(this.button);
            // add functionality
            this.button.addEventListener("click", () => {
                console.log(`Button nr. ${i+1}`);
            });
        }
    }

    createNextButton() {
        this.nextButton = document.createElement("button");
        this.nextButton.textContent = "Next";
        this.nextButton.classList.add("nextButton");
        this.testArea.appendChild(this.nextButton);
        // add functionality
        this.nextButton.addEventListener("click", () => {
            this.questionNr++;
            this.updateProgressBar();
        });
    }

}

const t1 = new Test("test1");