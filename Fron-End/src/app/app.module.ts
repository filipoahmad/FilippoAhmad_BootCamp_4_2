import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { DataserviceService } from './dataservice.service';

import { AppComponent } from './app.component';
import { CourseListComponent } from './course-list/course-list.component';

@NgModule({
  declarations: [
    AppComponent,
    CourseListComponent
  ],
  imports: [
    BrowserModule,
    FormsModule
  ],
  providers: [DataserviceService],
  bootstrap: [AppComponent]
})
export class AppModule { }
