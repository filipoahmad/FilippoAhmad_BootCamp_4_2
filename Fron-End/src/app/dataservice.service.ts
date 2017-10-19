import { Injectable } from '@angular/core';

@Injectable()
export class DataserviceService {

  id:number;
  name:string = "";
  
  constructor() { }
  public courseList: object[] = [
   
    {'id' : '10', 'name' : 'Fisika'},
    {'id' : '20', 'name' : 'IPA'},
    {'id' : '30', 'name' : 'Biologi'},
    {'id' : '40', 'name' : 'Kimia'},
    {'id' : '50', 'name' : 'Matematika'},
  ]

  AddCourse(){
    this.courseList.push({
      "id" : this.id,
      "name" : this.name
    });
  }
}

