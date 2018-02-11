/*jshint esversion: 6 */

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
        this.parentDom = document.querySelector(".progressBar");
        this.submitButton = document.querySelector(".form-submit");
    }

    createCanvas() {
        this.canvas = document.createElement("canvas");
        this.canvas.setAttribute("width", "400");
        this.canvas.setAttribute("height", "40");
        this.canvas.classList.add("canvas");
        this.parentDom.appendChild(this.canvas);
        this.ctx = this.canvas.getContext("2d");
    }

    getValues() {
        const values = this.parentDom.innerText;
        this.questionNr = values[0];
        this.questionCount = values[1];
        this.parentDom.innerText = "";
    }

    createFakeBorder() {
        const x = 5;
        this.ctx.beginPath();
        this.ctx.moveTo(x, x);
        this.ctx.lineTo(this.canvas.width - x, x);
        this.ctx.stroke();
        // this.ctx.endPath();

        this.ctx.beginPath();
        this.ctx.moveTo(this.canvas.width - x, x);
        this.ctx.lineTo(this.canvas.width - x, this.canvas.height - x);
        this.ctx.stroke();
        // this.ctx.endPath();

        this.ctx.beginPath();
        this.ctx.moveTo(this.canvas.width - x, this.canvas.height - x);
        this.ctx.lineTo(x, this.canvas.height - x);
        this.ctx.stroke();
        // this.ctx.endPath();

        this.ctx.beginPath();
        this.ctx.moveTo(x, this.canvas.height - x);
        this.ctx.lineTo(x, x);
        this.ctx.stroke();
        // this.ctx.endPath();
    }

    drawProgress() {
        const mark = this.canvas.width/this.questionCount*this.questionNr;
        for(let i = 0; i< 200 * this.questionNr; i++){
            const x1 = Math.random() * mark;
            const y1 = Math.random() * this.canvas.height;
            const x2 = Math.random() * 10 + x1;
            const y2 = Math.random() * this.canvas.height;
            this.ctx.beginPath();
            this.ctx.moveTo(x1, y1);
            this.ctx.lineTo(x2, y2);
            this.ctx.stroke();
        }
        // this.ctx.closePath();
        // this.ctx.fillRect(0, 0, mark, this.canvas.height);
    }

    changeButtonText() {
        if(this.questionNr === this.questionCount) {
            this.submitButton.innerText = "Done";
        }
    }
}

const pb = new ProgressBar();

// var c=document.getElementById("myCanvas");
// var ctx=c.getContext("2d");
// ctx.beginPath();
// ctx.moveTo(0,0);
// ctx.lineTo(300,150);
// ctx.stroke();