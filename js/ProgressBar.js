/*jshint esversion: 6 */

/*
This class creates the progress bar as well as changes
the button text on last question
*/

class ProgressBar {
    constructor(){
        this.cacheDom();
        this.getValues();
        this.createCanvas();
        this.createFakeBorder();
        this.drawProgress();
        this.changeButtonText();
    }

    cacheDom() {
        this.parentDom    = document.querySelector(".form-progressBar");
        this.submitButton = document.querySelector(".form-submit");
    }

    createCanvas() {
        this.canvas = document.createElement("canvas");
        this.canvas.setAttribute("width", "400");
        this.canvas.setAttribute("height", "40");
        this.canvas.classList.add("form-canvas");
        this.parentDom.appendChild(this.canvas);
        this.ctx = this.canvas.getContext("2d"); // will come in handy below
    }

    // current and total qusetion values from php to DOM to here
    getValues() {
        const values             = this.parentDom.innerText;
        this.questionNr          = values[0];
        this.questionCount       = values[1];
        this.parentDom.innerText = "";
    }

    // for effect
    createFakeBorder() {
        const margin = 5;
        const cw = this.canvas.width;
        const ch = this.canvas.height;
        this.drawLine(margin, margin, cw - margin, margin);
        this.drawLine(cw - margin, margin, cw - margin, ch - margin);
        this.drawLine(cw - margin, ch - margin, margin, ch - margin);
        this.drawLine(margin, ch - margin, margin, margin);
    }


    drawProgress() {
        // the point where the current question is on the progress bar
        const mark = this.canvas.width/this.questionCount*this.questionNr;

        // drawing some random lines from beginning to current question
        // mark on the progress bar
        for(let i = 0; i< 200 * this.questionNr; i++){
            const x1 = Math.random() * mark;
            const y1 = Math.random() * this.canvas.height;
            const x2 = Math.random() * 10 + x1;
            const y2 = Math.random() * this.canvas.height;
            this.drawLine(x1, y1, x2, y2);
        }
    }

    // helper function
    drawLine(x1, y1, x2, y2) {
        this.ctx.beginPath();
        this.ctx.moveTo(x1, y1);
        this.ctx.lineTo(x2, y2);
        this.ctx.stroke();
    }

    // chnage submit button text on last question
    changeButtonText() {
        if(this.questionNr === this.questionCount) {
            this.submitButton.innerText = "Done";
        }
    }
}

// instantiate the class
const pb = new ProgressBar();
