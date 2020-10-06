import { Component, OnInit } from '@angular/core';
import Typed from "typed.js";

@Component({
  selector: 'app-education',
  templateUrl: './education.component.html',
  styleUrls: ['./education.component.css']
})
export class EducationComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    // const optionsEdu = {
    //   strings: ['Level 8 Higher Diploma in Science in Computing | National College of Ireland, Dublin | SEP 2017 - SEP 2018. Level 8 Bachelor degree in Marketing and Advertising | Instituto Municipal de Ensino Superior de São Caetano do Sul, São Caetano do Sul - Brazil | JAN 1999 - DEC 2002 Cloud Guru, Online Course — AWS Certified Developer - Associate'],
    //   typeSpeed: 0,
    //   backSpeed: 0,
    //   showCursor: false,
    //   cursorChar: '_',
    //   loop: false
    // };
    // const typedEdu = new Typed('.typed-element-edu', optionsEdu);

  }
}

