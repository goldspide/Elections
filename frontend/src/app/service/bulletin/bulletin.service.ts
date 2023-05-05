import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class BulletinService {
  constructor(private http: HttpClient) {}

  postBulletin(data: any) {
    return this.http.post<any>('http://localhost:8000/api/Bulletin', data).pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  getBulletin() {
    return this.http.get<any>('http://localhost:8000/api/Bulletin').pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  updateBulletin(data: any, id: number) {
    return this.http.put<any>('http://localhost:8000/api/Bulletin/'+id, data).pipe(
      map((res: any) => {
        return res;
      })
    );
  }

  deleteBulletin(id: number) {
    return this.http.delete<any>('http://localhost:8000/api/Bulletin/'+id).pipe(
      map((res: any) => {
        return res;
      })
    );
  }
}
