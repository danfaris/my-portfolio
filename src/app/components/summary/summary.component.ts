import { Component, OnInit } from '@angular/core';
import Typed from "typed.js";

@Component({
  selector: 'app-summary',
  templateUrl: './summary.component.html',
  styleUrls: ['./summary.component.css']
})
export class SummaryComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    const optionsTwo = {
      strings: ['Bilingual (Portuguese and English) professional with a BSc in Advertising and graduated with a higher diploma in Computer Science at NCI with overall 15 years of experience in entrepreneurship, business management, audiovisual editing/post-production, and 1 year experience with Java programming.'],
      typeSpeed: 0,
      backSpeed: 0,
      showCursor: false,
      cursorChar: '_',
      loop: false
    };
    const typedTwo = new Typed('.typed-element-two', optionsTwo);

  }

}
