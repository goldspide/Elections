import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ElectionService {
  constructor(private http: HttpClient) {}
  //cette methode nest pas sur vue que on insert n'importe quoi

  postElection(data: any) {
    return this.http.post<any>('http://localhost:8000/api/Election', data).pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  getSelection() {
    return this.http.get<any>('http://localhost:8000/api/Election').pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  updateElection(data: any, id: number) {
    return this.http
      .put<any>('http://localhost:8000/api/Election/' + id, data)
      .pipe(
        map((res: any) => {
          return res;
        })
      );
  }

  deleteElection(id: number) {
    return this.http
      .delete<any>('http://localhost:8000/api/Election/' + id)
      .pipe(
        map((res: any) => {
          return res;
        })
      );
  }
}
