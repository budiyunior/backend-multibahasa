import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { ServerService } from '../../services/server.service';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent implements OnInit {
  Setup: any = [];

  constructor(
    public translate: TranslateService,
    private serverService: ServerService
  ) {
    translate.addLangs(['Indonesia', 'English', 'Jepang']);
    translate.setDefaultLang('Indonesia');
    this.readSetup();
    // if(translate.use('en')){
    //   console.log('asasa');
    //   this.readSetup_en();
    // }else if(translate.use('id')){
    //   this.readSetup();
    // }else{
    //   this.readSetup_jp();
    // }

  }

  readSetup() {
    this.serverService.getSetups().subscribe((data) => {
      this.Setup = data;
    })
  }

  readSetup_en() {
    this.serverService.getSetups_en().subscribe((data) => {
      this.Setup = data;
    })
  }

  readSetup_jp() {
    this.serverService.getSetups_jp().subscribe((data) => {
      this.Setup = data;
    })
  }

  switchLang(lang: string) {
    console.log('lang' + lang);
    this.translate.use(lang);

    if (lang == "Indonesia") {
      this.readSetup();
    } else if (lang == "English") {
      this.readSetup_en();
    } else if (lang == "Jepang") {
      this.readSetup_jp();
    }
  }

  ngOnInit(): void {
  }
}
