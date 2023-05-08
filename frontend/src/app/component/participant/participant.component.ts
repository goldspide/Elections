import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Participant } from 'src/app/model/participant.model';
import { ApiService } from 'src/app/service/participant/api.service';

declare var window: any;

@Component({
  selector: 'app-participant',
  templateUrl: './participant.component.html',
  styleUrls: ['./participant.component.scss'],
})
export class ParticipantComponent {
  ParticipantData!: any;
  RegionData!:any;
  fromModal: any;
  formValue!: FormGroup;
  showAdd!: boolean;
  showUpdate!: boolean;
  number!: number;
  participantModel = new Participant();
  constructor(private formbuilder: FormBuilder, private api: ApiService) {}

  ngOnInit(): void {
    this.number = -1;
    this.fromModal = new window.bootstrap.Modal(
      document.getElementById('exampleModal')
    );
    this.formValue = this.formbuilder.group({
      Nom: [''],
      Num_cni: [''],
      Email: [''],
      Telephone: [''],
      Region: [''],
      Password: [''],
      Status: [''],
      Etat: [''],
      Age: [''],
      Login: [''],
      Sexe: [''],
    });

    this.getParticipant();
  }
  openModal() {
    this.fromModal.show();
  }
  doSomeThing() {
    this.fromModal.hide();
  }
  clickAddParticipant() {
    this.formValue.reset();
    this.showAdd = true;
    this.showUpdate = false;
  }

  postParticipant() {
    this.participantModel.nom = this.formValue.value.Nom;
    this.participantModel.age = this.formValue.value.Age;
    this.participantModel.etat = this.formValue.value.Etat;
    this.participantModel.id_region = this.formValue.value.Region;
    this.participantModel.num_cni = this.formValue.value.Num_cni;
    this.participantModel.sexe = this.formValue.value.Sexe;
    this.participantModel.password = this.formValue.value.password;
    this.participantModel.login = this.formValue.value.Login;
    this.participantModel.status = this.formValue.value.Status;
    this.participantModel.telephone = this.formValue.value.Telephone;
    this.participantModel.email = this.formValue.value.Email;

    this.api.postParticipant(this.participantModel).subscribe(
      (res) => {
        console.log(res);
        console.log(this.participantModel);
        alert('enregistrement effectue avec succes');
        this.formValue.reset();
        let ref = document.getElementById('cancel');
        ref?.click();
      },
      (err) => {
        alert('echec de l ajout');
      }
    );
  }

  getParticipant() {
    this.api.getParticipant().subscribe((res) => {
      this.ParticipantData = res;
    });
  }

  getRegion(){
    this.api.getRegion().subscribe((res)=>{
      this.RegionData = res;
      console.log(res)
    });
  }


  deleteParticipant(participant: any) {
    this.api.deleteParticipant(participant.id).subscribe((res) => {
      alert('suppresion effectue avec success');
      this.getParticipant();
    });
  }

  modifierParticipant(participant: any) {
    this.showAdd = false;
    this.showUpdate = true;
    this.number = participant.id;
    // affectation des valeur a des parametre
    this.participantModel.age = participant.age;
    this.participantModel.etat = participant.etat;
    this.participantModel.id = participant.id;
    this.participantModel.id_region = participant.id_region;
    this.participantModel.login = participant.login;
    this.participantModel.nom = participant.nom;
    this.participantModel.num_cni = participant.num_cni;
    // this.participantModel.password = participant.password;
    this.participantModel.sexe = participant.sexe;
    this.participantModel.status = participant.status;
    this.participantModel.telephone = participant.telephone;
    this.participantModel.email = participant.email;

    // affectation des valeur au formulaire
    this.formValue.controls['Nom'].setValue(participant.nom);
    this.formValue.controls['Num_cni'].setValue(participant.num_cni);
    this.formValue.controls['Email'].setValue(participant.email);
    this.formValue.controls['Telephone'].setValue(participant.telephone);
    this.formValue.controls['Region'].setValue(participant.id_region);
    // this.formValue.controls['Password'].setValue(participant.password);
    this.formValue.controls['Status'].setValue(participant.status);
    this.formValue.controls['Etat'].setValue(participant.etat);
    this.formValue.controls['Age'].setValue(participant.age);
    this.formValue.controls['Sexe'].setValue(participant.sexe);
    this.formValue.controls['Login'].setValue(participant.login);
  }
  updateParticipant() {
    this.participantModel.email = this.formValue.value.Email;
    this.participantModel.login = this.formValue.value.Login;
    this.participantModel.etat = this.formValue.value.Etat;
    this.participantModel.num_cni = this.formValue.value.Num_cni;
    this.participantModel.telephone = this.formValue.value.Telephone;
    this.participantModel.status = this.formValue.value.Status;
    this.participantModel.sexe = this.formValue.value.Sexe;
    this.participantModel.id_region = this.formValue.value.Region;
    this.participantModel.age = this.formValue.value.Age;
    this.participantModel.nom = this.formValue.value.Nom;

    this.api.UpdateParticipant(this.participantModel, this.number).subscribe(
      (res) => {
        console.log(res);
        console.log(this.participantModel);
        alert('modification effectue avec succes');
        this.formValue.reset();
        let ref = document.getElementById('cancel');
        ref?.click();
        this.getParticipant();
      },
      (err) => {
        alert('Echec de la mise ajour');
      }
    );
  }
}
