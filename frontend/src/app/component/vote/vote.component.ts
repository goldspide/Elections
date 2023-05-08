import { Component } from '@angular/core';
import { Form, FormBuilder,FormGroup} from '@angular/forms';
import { Vote } from 'src/app/model/vote.model';
import { VoteService } from 'src/app/service/vote/vote.service';

declare var window:any;


@Component({
  selector: 'app-vote',
  templateUrl: './vote.component.html',
  styleUrls: ['./vote.component.scss']
})
export class VoteComponent {
  VoteData!:any;
  ParticipantData!:any
  ElectionData!:any
  BulletinData!:any
  fromModal:any;
  formValue!:FormGroup;
  number!:number;
  showAdd!:boolean;
  showUpdate!:boolean;
  voteModel: Vote = new Vote();

  constructor(private formbuilder: FormBuilder, private api: VoteService){}


  ngOnInit(): void {
    this.number = -1;
    this.fromModal = new window.bootstrap.Modal(
      document.getElementById('exampleModal')
    );
    this.formValue = this.formbuilder.group({
      label:[''],
      participant:[''],
      election:[''],
      bulletin:['']
    })

    this.getVote();

  }
  openModal(){
    this.fromModal.show();
  }
  doSomeThing(){

    this.fromModal.hide();
  }
  clickAddVote(){
    this.formValue.reset();
    this.showAdd = true;
    this.showUpdate = false;

  }
  postVote(){
    this.voteModel.label = this.formValue.value.Label;
    this.voteModel.id_participant = this.formValue.value.participant;
    this.voteModel.id_election = this.formValue.value.election;
    this.voteModel.id_bulletin = this.formValue.value.bulletin;
    this.api.postVote(this.voteModel).subscribe(res=>{
      console.log(res);
      console.log(this.voteModel);
      alert("votre vote a etait enregistree");
      this.formValue.reset();
      let ref = document.getElementById('cancel');
      ref?.click();
    },
    err=>{
      alert("Echec du vote");
    })
  }
  getVote(){
    this.api.getSVote().subscribe(res=>{
      this.VoteData = res;
      console.log(res)
    })
  }
  deleteVote(vote:any){
    this.api.deleteVote(vote.id).subscribe(res=>{
      alert(`region supprime`)
      this.getVote();
    })

  }
  modifierVote(vote:any){
    this.showAdd =false;
    this.showUpdate = true;
    this.voteModel.id = vote.id;
    this.number = vote.id;
    this.formValue.controls['label'].setValue(vote.label);
    this.formValue.controls['participant'].setValue(vote.id_participant);
    this.formValue.controls['election'].setValue(vote.id_election);
    this.formValue.controls['bulletin'].setValue(vote.id_bulletin);
  }
  updateVote(){
    this.voteModel.label=this.formValue.value.label;
    this.voteModel.id_bulletin=this.formValue.value.bulletin;
    this.voteModel.id_election=this.formValue.value.election;
    this.voteModel.id_participant=this.formValue.value.participant;
    this.api.updateVote(this.voteModel,this.number).subscribe(res=>{
      alert("mise ajour effectue avec success")
      this.formValue.reset();
      let ref = document.getElementById('cancel');
      ref?.click();
      this.getVote();
    })


  }
  getParticipant(){
    this.api.getParticipant().subscribe(res=>{
      this.ParticipantData = res;
      console.log(res);
    })

  }

  getBulletin(){
    this.api.getBulletiin().subscribe(res=>{
      this.BulletinData = res;
      console.log(res);
    })
  }
  getElection(){
    this.api.getElection().subscribe(res=>{
      this.ElectionData = res;
      console.log(res);
    })
  }

}
