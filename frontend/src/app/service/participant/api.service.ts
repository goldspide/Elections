import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  constructor(private http: HttpClient) {}

  postParticipant(data: any) {
    return this.http.post<any>('http://localhost:8000/api/participant', data).pipe(
        map((res: any) => {
          return res;
        })
      );
  }

  getParticipant() {
    return this.http.get<any>('http://localhost:8000/api/participant').pipe(
      map((res: any) => {
        return res;
      })
    );
  }
  UpdateParticipant(data: any, id: number) {
    return this.http.put<any>('http://localhost:8000/api/participant/'+id, data).pipe(
      map((res) => {
        return res;
      })
    );
  }
  deleteParticipant(id: number) {
    return this.http.delete<any>('http://localhost:8000/api/participant/'+id).pipe(
      map((res) => {
        return res;
      })
    );
  }

  getRegion() {
    return this.http.get<any>('http://localhost:8000/api/region').pipe(
      map((res: any) => {
        return res;
      })
    );
  }

}
