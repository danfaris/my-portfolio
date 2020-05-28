import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';


const httpOptions = {
  headers: new HttpHeaders({ ContentType: 'application/json'})
};

@Injectable({
  providedIn: 'root'
})
export class BikeService {

  constructor(private http: HttpClient) { }

  getBikes() {
    return this.http.get('/server/api/v1/bikes');
  }

  getBike(id: number) {
    return this.http.get('/server/api/v1/bikes/' + id);
  }

  getBikeRegistration(bike) {
    const body = JSON.stringify(bike);
    return this.http.post('/server/api/v1/bikes/load', body, httpOptions);
  }

  // getBikeRegistration(bike) {
  //   const body = bike;
  //   return this.http.post('/server/api/v1/bikes/load', bike, httpOptions);
  // }
}
