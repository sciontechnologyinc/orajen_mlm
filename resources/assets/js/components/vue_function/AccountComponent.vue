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
                    <tbody  v-for = "memberlist in memberlists" :key="memberlist.id">
                        <tr>
                            <td>{{memberlist.firstname}}</td>
                            <td>{{memberlist.middlename}}</td>
                            <td>{{memberlist.lastname}}</td>
                            <td>{{memberlist.email}}</td>
                            <td>{{memberlist.sponsorid}}</td>
                            <td>{{memberlist.placementid}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class='newmember-modal'>
            <div class='newmember-modal-content'>
                <form id="form_validation" action="./api/memberlist" method="POST" @submit.prevent="saveMember()">
                    <div class='newmember-modal-title'>Add Member</div>
                    <div class='newmember-modal-container'>
                        <div class='newmember-modal-label'>Full Name:</div>
                        <div class='newmember-group'>
                            <input type='text' id='firstname' class='form-control' placeholder='First Name' v-model="firstname"/>
                            <input type='text' id='middlename' class='form-control' placeholder='Middle Name' v-model="middlename"/>
                            <input type='text' id='lastname' class='form-control' placeholder='Last Name' v-model="lastname"/>
                        </div>
                        <div class='newmember-modal-label'>Address:</div>
                        <textarea id='Address' class='form-control' v-model="address"></textarea>
                        <div class='newmember-modal-label'>Email Address:</div>
                        <input type='email' id='email' class='form-control' v-model="email"/>
                        <div class='newmember-modal-label'>Mobile Number:</div>
                        <input type='text' id='mobileno' class='form-control' v-model="mobileno"/>
                        <div class='newmember-modal-label'>Sponsor ID:</div>
                        <input type='text' id='sponsor_id' class='form-control' v-model="sponsorid"/>
                        <div class='newmember-modal-label'>Placement ID:</div>
                        <input type='text' id='placement_id' class='form-control' v-model="placementid"/>
                        <div class='newmember-modal-label'>Activation Code:</div>
                        <input type='text' id='activation_code' class='form-control' v-model="activationcode"/>
                        <div class='newmember-button'>
                            <button type='submit' class='btn btn-success mr-2'>Save</button>
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
                    activationcode:this.activationcode,
                }).then(response => {
                    console.log(response);
                }).catch(error =>{
                    console.log(error);
                })
            }
        },
        created(){
            axios.get('./api/memberlist')
            .then(response => this.memberlists = response.data);
        }
    }
</script>