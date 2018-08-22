<template>
    <div class='newmember-container'>
        <div class='newmember-action'>
            <button data-toggle="modal" data-target=".newmember-modal">
                <i class='fa fa-plus'></i> Add Member
            </button>
        </div>
        <div class='newmember-view'>
            <div class='newmember-view-content'>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Firstname</td>
                            <td>Middlename</td>
                            <td>Lastname</td>
                            <td>Email</td>
                            <td>Sponsor ID</td>
                            <td>Placement ID</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  v-for = "memberlist in memberlists" :key="memberlist.id">
                            <td>{{memberlist.firstname}}</td>
                            <td>{{memberlist.middlename}}</td>
                            <td>{{memberlist.lastname}}</td>
                            <td>{{memberlist.email}}</td>
                            <td>{{memberlist.sponsorid}}</td>
                            <td>{{memberlist.placementid}}</td>
                            <td>
                                <button class='edit'><i class='fas fa-pen-square'></i></button>
                                <button class='delete'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class='newmember-modal'>
            <div class='newmember-modal-content'>
                <form id="form_validation" action="./api/memberlist" method="POST" @submit.prevent="saveMember()">
                   <label class="form-label">ADD MEMBER </label>
                    <div class='newmember-modal-container'>
                        <div class='newmember-modal-label'>Full Name :</div>
                        <div class='newmember-group'>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" v-model = "firstname" name="firstname" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" v-model = "middlename" name="middlename" placeholder="Middle Name" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" v-model = "lastname" name="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Address :</label>
                            <input type="text" class="form-control" v-model = "address" name="address" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Email :</label>
                            <input type="email" class="form-control" v-model = "email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Contact :</label>
                            <input type="number" class="form-control" v-model = "mobileno" name="mobileno" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Sponsor ID :</label>
                            <input type="text" class="form-control" v-model = "sponsorid" name="sponsorid" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Placement ID :</label>
                            <input type="text" class="form-control" v-model = "placementid" name="placementid" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Activation Code :</label>
                            <input type="text" class="form-control" v-model = "activationcode" name="activationcode" required>
                        </div>
                    </div>
                    <div class='newmember-button'>
                        <button type='submit'>Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                firstname: '',
                middlename:'',
                lastname:'',
                address:'',
                email:'',
                mobileno:'',
                sponsorid:'',
                placementid:'',
                activationcode:'',
                memberlists: []
            }
        },
        methods:{
            saveMember() {
                axios.post('./api/memberlist',{
                    firstname:this.firstname,
                    middlename:this.middlename,
                    lastname:this.lastname,
                    address:this.address,
                    email:this.email,
                    mobileno:this.mobileno,
                    sponsorid:this.sponsorid,
                    placementid:this.placementid,
                    activationcode:this.activationcode
                }).then(response => {
                    console.log(response);
                }).catch(error =>{
                    console.log(error);
                })

                Event.$emit('taskCreated',{
                    firstname:this.firstname,
                    middlename:this.middlename,
                    lastname:this.lastname,
                    address:this.address,
                    email:this.email,
                    mobileno:this.mobileno,
                    sponsorid:this.sponsorid,
                    placementid:this.placementid,
                    activationcode:this.activationcode
                })

                this.firstname='';
                this.middlename='';
                this.lastname='';
                this.address='';
                this.email='';
                this.mobileno='';
                this.sponsorid='';
                this.placementid='';
                this.activationcode='';

            }
        },
        created(){
            axios.get('./api/memberlist')
            .then(response => this.memberlists = response.data);

            Event.$on('taskCreated',(firstname,middlename,lastname,address,email,mobileno,sponsorid,placementid,activationcode)=>{
                this.memberlists.push(firstname,middlename,lastname,address,email,mobileno,sponsorid,placementid,activationcode);
            })
        }
    }
</script>