import { Region } from "./region.model";

export class Participant {
  public id?:number;
  public nom?:String;
  public num_cni?:string;
  public age?:number;
  public sexe?:string;
  public status?:string;
  public login?:string;
  public password?:string;
  public etat?:string;
  public telephone?:string;
  public email?:string;
  public id_region?:Region;

  public constructor() { }
}
