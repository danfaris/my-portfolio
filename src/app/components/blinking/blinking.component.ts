import { Component, OnInit } from '@angular/core';
import Typed from "typed.js";

@Component({
  selector: 'app-blinking',
  templateUrl: './blinking.component.html',
  styleUrls: ['./blinking.component.css']
})
export class BlinkingComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    const options = {
      strings: ['Innovation.', 'Challenging.', 'Awesome!! I code Apps, Robots and Devices.',],
      typeSpeed: 100,
      backSpeed: 100,
      showCursor: true,
      cursorChar: '|',
      loop: true
    };
    const typed = new Typed('.typed-element', options);

  }

}
