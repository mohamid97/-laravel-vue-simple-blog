<template>
    <div class="register">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        aria-describedby="firstName"
                    />
                </div>

                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        aria-describedby="lastName"
                    />
                </div>


                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label"
                        >Email address</label
                    >
                    <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                    />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputPassword1" class="form-label"
                        >Password</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword1"
                    />
                </div>
                <div class="col-md-6">
                    <label for="exampleInputPassword2" class="form-label"
                        >Confirm Password</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword2"
                    />
                </div>

                <div class="form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                    />
                    <label class="form-check-label" for="exampleCheck1"
                        >Check me out</label
                    >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<style scoped>
.register {
    margin-top: 50px;
}
.form-check{
    margin:20px 0;
}
</style>
