import { Injectable } from '@angular/core';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  constructor(private http: HttpClient) { }

  postRegion(data: any) {
    return this.http.post<any>('http://localhost:8000/api/region', data).pipe(
      map((res: any) => {
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

  updateRegion(data: any,id:number){
    return this.http.put<any>('http://localhost:8000/api/region/'+id,data).pipe(map((res:any)=>{
      return res;
    }))
  }

  deleteRegion(id:number){
    return this.http.delete<any>("http://localhost:8000/api/region/"+id).pipe(map((res:any)=>{
      return res;
    }))
  }
}
