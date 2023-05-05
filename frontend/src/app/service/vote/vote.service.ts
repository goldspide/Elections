import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class VoteService {

  constructor(private http: HttpClient) { }

  postVote(data: any) {
    return this.http.post<any>('http://localhost:8000/api/Vote', data).pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  getSVote() {
    return this.http.get<any>('http://localhost:8000/api/Vote').pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  updateVote(data: any, id: number) {
    return this.http
      .put<any>('http://localhost:8000/api/Vote/' + id, data)
      .pipe(
        map((res: any) => {
          return res;
        })
      );
  }

  deleteVote(id: number) {
    return this.http
      .delete<any>('http://localhost:8000/api/Vote/' + id)
      .pipe(
        map((res: any) => {
          return res;
        })
      );
  }

  getParticipant(){
    return this.http.get<any>('http://localhost:8000/api/Participant').pipe(map((res:any)=>{
      return res;
    }))
  }

  getElection(){
    return this.http.get<any>('http://localhost:8000/api/Election').pipe(map((res:any)=>{
      return res;
    }))
  }

  getBulletiin(){
    return this.http.get<any>('http://localhost:8000/api/Bulletin').pipe(map((res:any)=>{
      return res;
    }))
  }
}
